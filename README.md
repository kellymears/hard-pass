# Hard Pass

WordPress Plugin for maintaining a hardcoded block blacklist (in PHP).

## Installation

Requires PHP 7.1.3, I think.

Just run `composer install` and you should be good to go (compiled script included in package).

If you want to modify the JS you can do so with `yarn && yarn mix` but it isn't necessary to utilize this plugin.

## Usage

Install and modify `blacklist.config.php` to fit your desires. My personal wrecking ball is included.

## How does it work

Create a new WordPress REST Endpoint @ 'hardpass/v2/blacklist' which serves the `blacklist.config.php` blacklist in JSON format.

A small script is enqueued and consumed by the editor which unregisters blocks included in that call.

I do not know why this is not a core feature of Project Gutenberg.
