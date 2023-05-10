<?php

namespace Drupal\commerce_recurring\Plugin\Commerce\BillingSchedule;

use Drupal\commerce_recurring\BillingPeriod;
use Drupal\Core\Datetime\DateHelper;
use Drupal\Core\Datetime\DrupalDateTime;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a fixed interval billing schedule.
 *
 * Billing periods generated by this plugin always start at the beginning
 * of the configured interval. For example, if a monthly subscription is
 * opened on Oct 12th, the generated billing period will be Oct 1st - Nov 1st.
 *
 * Monthly intervals can have a custom start day (Oct 3rd - Nov 3rd, etc).
 * Yearly intervals can have a custom start month/day (Aug 6th - Aug 6th, etc).
 *
 * @CommerceBillingSchedule(
 *   id = "fixed",
 *   label = @Translation("Fixed interval"),
 * )
 */
class Fixed extends IntervalBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return parent::defaultConfiguration() + [
      'start_month' => 1,
      'start_day' => 1,
    ];
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state) {
    $form = parent::buildConfigurationForm($form, $form_state);

    $form['start_month'] = [
      '#type' => 'select',
      '#title' => $this->t('Start month'),
      '#description' => $this->t('The month in which the billing period will start.'),
      '#options' => DateHelper::monthNames(TRUE),
      '#default_value' => $this->configuration['start_month'],
      '#states' => [
        'visible' => [
          ':input[name="configuration[fixed][interval][unit]"]' => ['value' => 'year'],
        ],
      ],
    ];
    $form['start_day'] = [
      '#type' => 'select',
      '#title' => $this->t('Start day'),
      '#description' => $this->t('The day on which the billing period will start.'),
      '#options' => DateHelper::days(TRUE),
      '#default_value' => $this->configuration['start_day'],
      '#states' => [
        'visible' => [
          ':input[name="configuration[fixed][interval][unit]"]' => [
            ['value' => 'month'],
            ['value' => 'year'],
          ],
        ],
      ],
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function submitConfigurationForm(array &$form, FormStateInterface $form_state) {
    parent::submitConfigurationForm($form, $form_state);

    if (!$form_state->getErrors()) {
      $interval_unit = $this->configuration['interval']['unit'];
      $values = $form_state->getValue($form['#parents']);

      $this->configuration['start_month'] = 1;
      $this->configuration['start_day'] = 1;
      if (in_array($interval_unit, ['month', 'year'])) {
        if ($interval_unit == 'year') {
          $this->configuration['start_month'] = $values['start_month'];
        }
        $this->configuration['start_day'] = $values['start_day'];
      }
    }
  }

  /**
   * {@inheritdoc}
   */
  public function generateFirstBillingPeriod(DrupalDateTime $start_date) {
    // @todo $start_date->setTimezone($site_timezone)
    $interval = $this->getInterval();
    $adjusted_start_date = $this->adjustStartDate($start_date);
    return new BillingPeriod($adjusted_start_date, $interval->add($adjusted_start_date));
  }

  /**
   * {@inheritdoc}
   */
  public function generateNextBillingPeriod(DrupalDateTime $start_date, BillingPeriod $billing_period) {
    $next_start_date = $billing_period->getEndDate();
    return new BillingPeriod($next_start_date, $this->getInterval()->add($next_start_date));
  }

  /**
   * Adjusts the start date to the beginning of the configured interval.
   *
   * In addition to flooring the start date (so that May 15th becomes May 1st
   * for monthly intervals, etc), it also handles custom start months/days.
   *
   * @param \Drupal\Core\Datetime\DrupalDateTime $start_date
   *   The start date.
   *
   * @return \Drupal\Core\Datetime\DrupalDateTime
   *   The adjusted start date.
   */
  protected function adjustStartDate(DrupalDateTime $start_date) {
    $interval = $this->getInterval();
    $adjusted_start_date = $interval->floor($start_date);
    if (!in_array($interval->getUnit(), ['month', 'year'])) {
      return $adjusted_start_date;
    }

    $start_year = $start_date->format('Y');
    $start_month = $start_date->format('m');
    if ($interval->getUnit() == 'year') {
      $start_month = $this->configuration['start_month'];
    }
    $start_day = $this->configuration['start_day'];
    $adjusted_start_date->setDate($start_year, $start_month, $start_day);
    // Further adjust the date if it is now in the future, to account for
    // customers subscribing before the custom start month/day (which puts
    // them in the previous billing period).
    if ($adjusted_start_date->format('U') > $start_date->format('U')) {
      $adjusted_start_date = $interval->subtract($adjusted_start_date);
    }

    return $adjusted_start_date;
  }

}
