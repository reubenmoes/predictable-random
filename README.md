# Predictable Random plugin for Craft CMS 3.x

Generates a predictable random number based on a starting seed.

## Requirements

This plugin requires Craft CMS 3.0.0-beta.23 or later.

## Installation

To install the plugin, follow these instructions.

1. Open your terminal and go to your Craft project:

        cd /path/to/project

2. Then tell Composer to load the plugin:

        composer require haistudio/predictable-random

3. In the Control Panel, go to Settings → Plugins and click the “Install” button for Predictable Random.

## Predictable Random Overview

-Insert text here-

## Configuring Predictable Random

Set a seed with:

    {% do setPredictableRandomSeed(666) %}

Then get a number with:
    {% set number = predictableRandom(min, max) %}

Or get a random value from an array of possible values:
    {% set number = predictableRandom([value1, value2, value3]) %}

## Using Predictable Random

-Insert text here-

## Predictable Random Roadmap

Some things to do, and ideas for potential features:

* Release it

Brought to you by [Tobias Toft](http://www.hai-studio.com)
