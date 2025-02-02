# Phi (Φ)

**Phi** is a modern transpiler that enhances PHP with strong typing,
object-oriented improvements, and an integrated Blade-inspired templating system.
Much like TypeScript for JavaScript or C++ for C, Phi extends PHP with powerful
new features while maintaining full compatibility with existing PHP code.

## Features

- **Strong Typing**: Enforce and validate types both at compile-time and runtime,
helping prevent bugs early in the development process.
- **Object-Oriented Enhancements**: Phi offers advanced OOP features beyond
PHP's native capabilities, making it easier to write scalable and maintainable code.
- **Dynamic and Extensible Typing**: A flexible, TypeScript-inspired type system
that allows you to leverage both static and dynamic typing.
- **Integrated Templating**: Phi comes with a Blade-like templating system,
which simplifies rendering HTML by keeping templates clean and organized,
similar to Laravel's Blade.
- **Seamless PHP Compatibility**: Any valid PHP code is also valid Phi code.
This means you can incrementally adopt Phi in your existing PHP projects
without any friction.
- **Eliminates PHPDoc & Annotations**: No need for PHPDoc comments
or annotations—types are checked directly in the code,
reducing boilerplate and improving readability.

## Installation

Phi can be installed easily via Composer or from source.

### Composer Installation

```bash
composer global require siguici/phi
```

### From Source

Clone the repository and compile the transpiler:

```sh
git clone https://github.com/siguici/phi.git
cd phi
make install
```

## Usage

Phi allows you to transpile Phi code into PHP code. Once installed,
you can run Phi via the command line to convert `.phi` files to `.php`.

### Example Command

```sh
phi source.phi
```

This will transpile your `source.phi` file into a PHP file, ready for execution.
The Phi compiler automatically performs optimizations
to ensure your PHP code runs smoothly and efficiently.

### Example Code

```phi
// Example of a basic function with strong typing
function greet(string $name): string {
    return "Hello, $name!";
}

echo greet("World");
```

Transpiled **PHP Code**:

```php
<?php

function greet(string $name): string {
    return "Hello, $name!";
}

echo greet("World");

?>
```

The Phi code shown here is transpiled into PHP code that is fully executable.
Phi checks types directly during transpilation,
ensuring that no type mismatches occur during runtime.

## Contributing

We welcome contributions to Phi! Whether it's fixing bugs, suggesting new features,
or improving documentation, feel free to submit pull requests or open issues.

### How to Contribute

  1. Fork the repository.
  2. Create a new branch for your feature or fix.
  3. Write your code and add tests if necessary.
  4. Submit a pull request.

Please make sure to follow the existing coding style and conventions when contributing.

## License

**Phi (Φ)** is licensed under the MIT License.
See the [LICENSE.md](LICENSE.md) file for more details.

## Support

For any issues, questions, or feedback,
please [open an issue](https://github.com/siguici/phi/issues/new/choose)
or join [our community discussions](https://github.com/siguici/siguici/discussions).
