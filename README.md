# Phi <a href="https://phi-x.github.io" title="Phi"><img src="https://github.com/phi-x/art/blob/HEAD/phi-logo.svg?raw=true" alt="φ" height="24"/></a>
**Phi** is a modern transpiler that enhances PHP with strong typing,
object-oriented improvements, and an integrated Blade-inspired templating system.

[![packagist-version-icon]][packagist-version-link]
[![packagist-download-icon]][packagist-download-link]

---

## Quick Start

### Install Phi

Install Phi from [Composer](https://getcomposer.org) with:

```sh
composer global require phi-x/phi:dev-main
```

### Try Phi

Create a `hello.phi` file:

```phi
Hello, $name!
```

Run it with:

```sh
phi run hello --name=Phi
```

This displays: **Hello, Phi!**

---

## What is Phi?

Phi is a next-generation PHP transpiler that introduces strong typing,
advanced object-oriented programming features, and an optimized templating system.
By providing a more structured and scalable approach to PHP development,
Phi helps developers write cleaner, more maintainable, and error-resistant code.

## Why Phi?

- **Enhances PHP without breaking compatibility**: Phi allows developers to gradually
adopt new features without rewriting existing PHP projects.
- **Eliminates the need for PHPDoc and annotations**: Types are checked at both transpilation
and runtime, reducing redundant documentation.
- **Brings TypeScript-like flexibility**: Supports both static and dynamic typing
for a more robust development experience.
- **Integrates a powerful templating engine**: A Blade-inspired syntax simplifies
HTML rendering for modern web applications.

---

## Features

- **Strong Typing**: Enforce and validate types at both compile-time and runtime,
reducing bugs early in development.
- **Advanced Object-Oriented Features**: Provides enhanced OOP capabilitie
s beyond native PHP, making code more scalable and maintainable.
- **Dynamic and Extensible Typing**: A flexible type system inspired by TypeScript,
allowing both static and dynamic typing.
- **Integrated Templating Engine**: A Blade-like system for cleaner,
more structured HTML rendering, similar to Laravel's Blade.
- **Full PHP Compatibility**: Any valid PHP code is also valid Phi code,
enabling seamless integration into existing projects.
- **No Need for PHPDoc & Annotations**: Types are checked directly in the code,
reducing boilerplate and improving readability.

---

## Installation

Phi can be installed via Composer:

```sh
composer global require phi-x/phi:dev-main
```

## Usage

Phi transpiles `.phi` files into `.php`, enabling strong typing and additional
features while maintaining PHP compatibility.

### Example Command

```sh
phi source.phi
```

This converts `source.phi` into a PHP file, optimized for performance and execution.

### Example Code

```php
<?php
// Strongly-typed function in Phi
function greet<T extends string>(T $name): T {
    return "Hello, $name!";
}

echo greet("World");
```

#### Transpiled PHP Code

```php
<?php

function greet(string $name): string {
    return "Hello, $name!";
}

echo greet("World");

?>
```

Phi ensures that type mismatches are caught at transpilation,
making PHP development safer and more efficient.

---

## Contributing

We welcome contributions! Whether it's fixing bugs, suggesting new features,
or improving documentation, feel free to submit pull requests or open issues.

### How to Contribute

1. Fork the repository.
2. Create a new branch for your feature or fix.
3. Implement your changes and add tests where needed.
4. Submit a pull request.

Please follow the project's coding style and guidelines.

---

## License

**Phi φ** is licensed under the MIT License.
See the [LICENSE.md](LICENSE.md) file for more details.

---

## Support

For any issues, questions, or feedback:

- [Open an issue](https://github.com/phi-x/phi/issues/new/choose)
- Join [our community discussions](https://github.com/phi-x/phi/discussions)

[packagist-version-icon]: https://img.shields.io/packagist/v/phi-x/phi
[packagist-version-link]: https://packagist.org/packages/phi-x/phi "Phi Releases"

[packagist-download-icon]: https://img.shields.io/packagist/dt/phi-x/phi
[packagist-download-link]: https://packagist.org/packages/phi-x/phi "Phi Downloads"
