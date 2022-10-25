# About

This website its Online Ticket shop (e-Ticket) an online portal that purchases and sells tickets to concerts and events worldwid
![image](https://user-images.githubusercontent.com/50520333/189333914-f8856ab5-2ff9-437b-adf9-870a0d00cbc0.png)


# Installation 
```
git clone
cd Starlab-Intership-Team-4
cp .env.example .env
composer update
npm install
php artisan migrate --seed
```
### Start Project
``` 
php artisan serve
```
And 
``` 
npm run dev
```

### Configurate
- Server Configurate `.env`
- Project other Configurate `config/`

### Technology we use: 
- TALL Stack
- TailwinCSS
- AlpineJS (3)
- Laravel (9)
- Livewire

### Some Package 
- Laravel Jetstream
- Laravel Socialite
- Laravel Cashier (Stripe)
- Laravel Debugger
- Role and Permission (spatie)
- Medialibrary (spatie)
- WireUI


# Feature 
- SEO Meta Tags
- Vizitors 
- Contact 
- Feedback 
- Auditing
- Blog
- e-Mail Support (Notification)
- Admin Table
    - Multi Delelte
    - Sortable
    - Fast Paginate 
    - Serchable


 #### User
- Online/Offline
- Verify/UnVerify
- Ban/UnBan with Reason
- Role Asighn
- User Login Action track

 #### Event
- Multi Category
- Multi Tags
- Like, Share,whishlist,Report(polymorphism)
- Comment & Reply (polymorphism)
- Google Map
- Newsletter
- Rich Filter
- Ticket
Payment

#### Organisation 
- Multi Category
- Multi Tags
- Subscription with Notification 
- Report (polymorphism)
- Review with Star Rating (Polymorphism)
- Google Map
- Album/Gallery

# Command

This command make Livewire CRUD (for Modeles) on Admin Panel 

```
php artisan make:crud MODEL_NAME
```

# Developers
This project was made by Starloards Team (Starlab Inter)
- Alpet Gexha
- Butrint Hajrizi
- Florian Azemi
- Freskim Hisenaj
- Lirim Muqolli

