# Laravel Passport (with UUIDs)

## Fork Details

This is a fork of [laravel/passport](https://github.com/laravel/passport) with the following modifications:

1. The `oauth_clients.id` field has been converted to a UUID datatype.
1. The `oauth_access_tokens.user_id`, `oauth_clients.user_id`, and `oauth_auth_codes.user_id` foreign keys have been 
converted to a UUID datatype.
1. A field called `token_id` has been added to the `oauth_access_tokens` table with a datatype of UUID. This
allows a Polymorphic reference to either the `oauth_client.id` or `oauth_access_tokens.token_id` fields.


## Official Documentation

Documentation for Passport can be found on the [Laravel website](http://laravel.com/docs/master/passport).

## License

Laravel Passport is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
