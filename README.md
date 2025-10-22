# Phi <a href="https://siguici.github.io" title="Phi"><img src="https://github.com/siguici/art/blob/HEAD/phi-logo.svg?raw=true" alt="φ" height="24"/></a>
**Phi** is a modern transpiler that enhances PHP with strong typing,
object-oriented improvements, and an integrated Blade-inspired templating system.

[![packagist-version-icon]][packagist-version-link] [![packagist-download-icon]][packagist-download-link]

---

## ⚡ Quick Start

### 📦 Install Phi

Install Phi via [Composer](https://getcomposer.org) with:

```sh
composer global require siguici/phi:dev-main
```

### 🎉 Try Phi

Create a `hello.phi` file:

```phi
Hello, $name!
```

Run it with:

```sh
phi run hello --name=Phi
```

This displays: **Hello, Phi!** 🎊

---

## ❓ What is Phi?

Phi is a cutting-edge PHP framework that introduces:

✅ **Strong typing** for better code reliability 🔍
✅ **Advanced OOP features** for maintainable applications 🏗️
✅ **A powerful templating system** for seamless UI rendering 🎨
✅ **Full PHP compatibility** ensuring easy adoption 🔄

---

## 🔥 Why Choose Phi?

- 🚀 **Enhances PHP without breaking compatibility** – Upgrade your projects without major rewrites.
- ✍️ **No need for PHPDoc & annotations** – Types are enforced at both transpilation and runtime.
- ⚡ **Inspired by TypeScript** – Offers both static and dynamic typing for flexibility.
- 🎭 **Blade-like templating** – Clean and structured HTML rendering.

---

## 🌟 Features

- 🛡️ **Strong Typing** – Enforces types at compile-time and runtime.
- 🏗️ **Advanced OOP** – Expands PHP’s object-oriented capabilities.
- 🔄 **Dynamic & Static Typing** – Inspired by TypeScript.
- 🖥️ **Integrated Templating Engine** – A Blade-like system for clean HTML rendering.
- 🧩 **Seamless PHP Integration** – 100% compatible with existing PHP code.

---

## 📋 Requirements

🔹 [PHP](https://php.net/) 8.4 or higher (8.4.3+ recommended)  
🔹 [Composer](https://getcomposer.org/)  
🔹 [Git](https://git-scm.com/)  
🔹 [Node.js](https://nodejs.org/) (Optional)  

---

## 🚀 Installation

Install Phi from [Packagist](https://packagist.org/packages/siguici/phi) using Composer:

```sh
composer global require siguici/phi:dev-main
```

---

## 🛠️ Usage

Phi transpiles `.phi` files into `.php`, introducing enhanced features while maintaining PHP compatibility.

### 🔧 Example Command

```sh
phi source.phi
```

This converts `source.phi` into an optimized PHP file.

### 📝 Example Code

```php
<?php
// Strongly-typed function in Phi
function greet<T extends string>(T $name): T {
    return "Hello, $name!";
}

echo greet("World");
```

#### 🏆 Transpiled PHP Code

```php
<?php

function greet(string $name): string {
    return "Hello, $name!";
}

echo greet("World");

?>
```

Phi ensures type safety at transpilation, making PHP development more robust. 🛡️

---

## 🤝 Contributing

We welcome contributions! 💖 Whether it's bug fixes, new features, or documentation improvements, feel free to contribute.

### 📌 How to Contribute

1. 🍴 Fork the repository.
2. 🌱 Create a new branch.
3. 🛠️ Implement your changes and add tests.
4. 📤 Submit a pull request.

Please follow our coding style and contribution guidelines. 🙌

---

## 📜 License

Phi is licensed under the **MIT License**. See the [LICENSE.md](LICENSE.md) file for details.

---

## 💬 Support & Community

For questions, issues, or feedback:

- 🚀 [Open an issue](https://github.com/siguici/phi/issues/new/choose)
- 💬 Join [our discussions](https://github.com/siguici/phi/discussions)

[packagist-version-icon]: https://img.shields.io/packagist/v/siguici/phi
[packagist-version-link]: https://packagist.org/packages/siguici/phi "Phi Releases"

[packagist-download-icon]: https://img.shields.io/packagist/dt/siguici/phi
[packagist-download-link]: https://packagist.org/packages/siguici/phi "Phi Downloads"
