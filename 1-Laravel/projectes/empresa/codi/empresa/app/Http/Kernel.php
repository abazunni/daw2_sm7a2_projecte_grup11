protected $middlewareAliases = [
    // ... other middleware ...
    'admin' => \App\Http\Middleware\EnsureUserIsAdmin::class,
];
