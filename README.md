# Contact-form

## How to install  it :

- Open command line and go to your project repertory (eg. /**www** ) 
- Use `git clone https://github.com/QuentinP45/contact-form.git`
- Use `cd contact-form`
- Use `composer install`
 - To configure the app/config/parameters.yml in command line during composer installation:
   - Fill database_port (eg. **3306**, default for MySql)
   - Fill database_name (eg. **contact_form**)
   - Confirm or fill database_user (default is **root**)
   - Confirm or fill database_password (default is **null**)
- Create the database : use `php bin/console doctrine:database:create`
- Create **user** and **message** tables :
 -  Verify tables creation : use `php bin/console doctrine:schema:update --dump-sql`
 - Confirm creation : use `php bin/console doctrine:schema:update --force`
- Hydrate table user : use `php bin/console doctrine:fixtures:load` and confirm with **yes**
- Open server connection : use `php bin/console server:run`

## How to use it 

- Then use the given url into your navigator (eg. `http://127.0.0.1:8000`)
 - The following routes have to be used in addition of the given url above (eg. `http://127.0.0.1:8000/company`)
   - Go to contact-form homepage : use `/company` or `/company/home`
   - Go to contact-form admin : use `/admin` or `login`
   - Go to contact-form message view : use `/admin/view/` + **message id** (eg. `http://127.0.0.1:8000/admin/view/1`)

```
Warning:
- Be sure you have add a message using the contact form (http://127.0.0.1:8000/company) before using 
  the contact form message view

```