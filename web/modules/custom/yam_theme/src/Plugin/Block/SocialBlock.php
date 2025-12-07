<?php

declare(strict_types=1);

namespace Drupal\yam_theme\Plugin\Block;

use Drupal\Core\Block\Attribute\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\StringTranslation\TranslatableMarkup;

/**
 * Provides a social block.
 */
#[Block(
  id: 'yam_theme_social_block',
  admin_label: new TranslatableMarkup('Social Block'),
  category: new TranslatableMarkup('Custom'),
)]
final class SocialBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state): array {
    $form['facebook'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Facebook'),
      '#default_value' => $this->configuration['facebook'],
    ];
    $form['instagram'] = [
      '#type' => 'instagram',
      '#title' => $this->t('instagram'),
      '#default_value' => $this->configuration['instagram'],
    ];
    $form['x'] = [
      '#type' => 'textfield',
      '#title' => $this->t('X'),
      '#default_value' => $this->configuration['x'],
    ];
    $form['linkedin'] = [
      '#type' => 'textfield',
      '#title' => $this->t('LinkedIn'),
      '#default_value' => $this->configuration['linkedin'],
    ];
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state): void {
    $this->configuration['facebook'] = $form_state->getValue('facebook');
    $this->configuration['instagram'] = $form_state->getValue('instagram');
    $this->configuration['x'] = $form_state->getValue('x');
    $this->configuration['linkedin'] = $form_state->getValue('linkedin');
  }

  /**
   * {@inheritdoc}
   */
  public function build(): array {
    return [
      '#theme'=> 'socials',
      '#facebook' => $this->configuration['facebook'],
      '#instagram' => $this->configuration['instagram'],
      '#x' => $this->configuration['x'],
      '#linkedin' => $this->configuration['linkedin'],
    ];
  }

}
