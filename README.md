# Hasher

This is a small utility to generate hashed password for PHP applications that use `password_hash()` and `password_verify()`

## Install

Simply clone the repo somewhere and then run `composer install` inside the directory.

You may also want to add the directory to your `PATH` env variable, so you can invoke it from anywhere.

You can do this by adding something like the following to your `.zshrc`, `.bashrc`, `.bash_profile` etc

```shell
export PATH="$PATH:$HOME/Projects/hasher"
```

## Usage

Simply invoke `hasher` with one or more strings to generate hashes for.

```shell
$ hasher one two three
one => $2y$10$O6QPj6iGEcaEg1Lr0PxOuuQGmMFXO/Er5lIrcoN0QjXzWUgs7GY/2
two => $2y$10$jce642S7JHHZ.YSDoLsiNes.2weaT3HRja674NM8vKtGxEEXeM3yG
three => $2y$10$MBD7y72paUz3dyfbOf6Zpe2rz//sR.rhNvP43CVAyTXQ7nilBulva
```
