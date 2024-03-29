# Changelog

All notable changes to `auth` will be documented in this file.

## v0.0.9 - 2022-08-01

- Updates to auth0/login 7.x for compatibility with Laravel 9.x.

**Full Changelog**: https://github.com/salthq/salt-auth0/compare/0.0.8...0.0.9

## Upcoming for release 0.0.9

- Updates to auth0/login 7.x for compatibility with Laravel 9.x.

## v0.0.8 - 2022-04-07

- Remove translations for now

**Full Changelog**: https://github.com/salthq/salt-auth0/compare/0.0.7...0.0.8

## v0.0.7 - 2022-03-26

- Remove API translations for now as they weren't coming across properly in apps that didn't have translation logic set up
- Fix `Auth0IndexController` autoloading issue

**Full Changelog**: https://github.com/pango-studio/salt-auth0/compare/0.0.6...0.0.7

## v0.0.6 - 2022-03-26

## What's Changed

- Ensure that the auth0 token is updated when stale, rather than re-created

**Full Changelog**: https://github.com/pango-studio/salt-auth0/compare/0.0.5...0.0.6

## v0.0.5 - 2022-03-01

## What's Changed

- Tweak API access token logic so it only fires once per day rather than with every request

**Full Changelog**: https://github.com/pango-studio/salt-auth0/compare/0.0.4...0.0.5

## v0.0.4 - 2022-02-25

## What's Changed

- Added Auth0 API middleware
- Bump dependabot/fetch-metadata from 1.1.1 to 1.2.0 by @dependabot in https://github.com/pango-studio/salt-auth0/pull/1

**Full Changelog**: https://github.com/pango-studio/salt-auth0/compare/0.0.3...0.0.4

## 1.0.0 - 202X-XX-XX

- initial release
