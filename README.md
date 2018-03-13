# Laravel Turbolinks StimulusJS

This repo is an attempt from me learning to combine Turbolinks and StimulusJS.

So far the issues are:

- Cannot get the `$errors` variable from `back()->withErrors()`
- Sometimes the screen is flickering when trying to use back button after login
- After logout, when going to protected route (via `auth` middleware). Sometimes
  we can see the old screen.