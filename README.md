php artisan migrate
php artisan tinker
\App\Models\User::factory(10)->create()
composer require nuwave/lighthouse
php artisan vendor:publish --tag=lighthouse-schema
composer require mll-lab/laravel-graphiql
php artisan vendor:publish --tag=lighthouse-config



query ListAllUser {
  users(first: 3, page: 3) {
    data {
      id
      name
      email
      email_verified_at
      created_at
      updated_at
    }
    paginatorInfo {
      perPage
      lastPage
      total
      count
      lastItem
      lastPage
      firstItem
      currentPage
      hasMorePages
    }
  }
}

query singleUser {
  user(id: "1") {
    created_at
    email
    email_verified_at
    id
    name
    updated_at
  }
}

mutation addUser {
  createUser(name: "hello", email: "new@gmail.com", password: "12345678") {
    id
    name
    email
    email_verified_at
    created_at
    updated_at
  }
}

mutation addUserValidation {
  createUser(input: {name: "hello", email: "new@gmail.com", password: "12345678"}) {
    id
    name
    email
    email_verified_at
    created_at
    updated_at
  }
}

mutation updateUserValidation {
  updateUser(id: 11, input: {name: "hello12345678", password: "12345678"}) {
    id
    name
    email
    email_verified_at
    created_at
    updated_at
  }
}

query postAll{
  posts{
    id
    title
    author{
      name
    }
    comments{
      id
      reply
    }
  }
}
