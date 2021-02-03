<?php


function setting($key) {
  return SettingsManager::get($key);
}