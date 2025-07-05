# Train API
Repositroy to train API whith php

# Steps to use
1. GET: /api/user - to return all users
Method: GET
URL: url/api/user

Clique: Send

2. PATCH: /api/user - return one user
Method: PATCH
URL: url/api/user
body:
    - raw
```js
{
    "id": "1"
}
```

Clique: Send

3. POST: /api/user - add user
Method: POST
URL: url/api/user
body:
    - raw
```js
{
    "name": "lalala",
    "email": "lalala.albuquerque@mtec.ao"
}
```

Clique: Send

4. PUT: /api/user - update user
Method: PUT
URL: url/api/user
body:
    - raw
```js
{
    "id": "1",
    "name": "blabla",
    "email": "blabla.albuquerque@mtec.ao"
}
```

5. DELETE: /api/user - delete user
Method: DELETE
URL: url/api/user
body:
    - raw
```js
{
    "id": "1"
}
```
