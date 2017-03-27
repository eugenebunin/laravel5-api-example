## Installation

      1. composer install
      2. php artisan migrate
      3. php artisan db:seed

## Usage

### Register

      POST /api/auth/register HTTP/1.1
      Host: {{HOST}}
      Accept: application/json
      Content-Type: application/json

      {
      	"username": "user@user.com",
      	"password": "secret",
      	"grant_type": "password",
      	"client_id":1,
      	"client_secret": "stz1CjgQBbMTGD9kLy2d0N1a2WJEJuN8sJiw4Wi3"
      }

### Authentication

      POST /oauth/token HTTP/1.1
      Host: {{HOST}}
      Accept: application/json
      Content-Type: application/json

      {
      "username": "me@me.com",
      "password": "secret",
      "grant_type": "password",
      "client_id": 1,
      "client_secret": "stz1CjgQBbMTGD9kLy2d0N1a2WJEJuN8sJiw4Wi3"
      }

### Show profile

      GET /api/me HTTP/1.1
      Host: {{HOST}}
      Accept: application/json
      Content-Type: application/json
      Authorization: Bearer {{TOKEN}}

### Update profile

      PUT /api/me HTTP/1.1
      Host: {{HOST}}
      Accept: application/json
      Content-Type: application/json
      Authorization: Bearer {{TOKEN}}

      {
      "username": "user@user.com",
      "password": "secret",
      "password_confirmation": "secret",
      "name": "John Hartman"
      }
