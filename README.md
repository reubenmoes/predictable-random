# Predictable Random plugin for Craft CMS 3.x

Generates a predictable random number (or item in an array) based on a starting seed. For when you want things to seem random, but not really be random.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require haistudio/predictable-random

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Predictable Random.

## Configuring Predictable Random

Set a seed with:

        {% do setPredictableRandomSeed(666) %}

Get current seed value with:

        {% do getPredictableRandomSeed() %}

Get a random number within a range:

        {% set number = predictableRandom(min, max) %}

Or get a random value from an array of possible values:

        {% set number = predictableRandom([0,2,4,8,16,'bad','code']) %}


## Predictable Random Roadmap

None whatsoever.

