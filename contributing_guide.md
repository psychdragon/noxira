# Contributing to Decentralized Social

First off, thank you for considering contributing to Decentralized Social! It's people like you that make this platform a reality. This document provides guidelines and instructions for contributing to our codebase.

## Code of Conduct

By participating in this project, you agree to abide by our [Code of Conduct](CODE_OF_CONDUCT.md). Please read it before contributing.

## How Can I Contribute?

### Reporting Bugs

Before creating bug reports, please check our issue list as you might find that the bug has already been reported. When you are creating a bug report, please include as many details as possible:

- Use a clear and descriptive title
- Describe the exact steps to reproduce the problem
- Provide specific examples to demonstrate the steps
- Describe the behavior you observed after following the steps
- Explain which behavior you expected to see instead
- Include screenshots if possible
- Include your environment details (OS, browser, device, etc.)

### Suggesting Enhancements

When suggesting enhancements, please:

- Use a clear and descriptive title
- Provide a step-by-step description of the suggested enhancement
- Explain why this enhancement would be useful to most users
- Include mockups or examples if applicable

### Pull Requests

- Fill in the required template
- Do not include issue numbers in the PR title
- Include screenshots and animated GIFs in your pull request whenever possible
- Follow our coding standards and guidelines
- Document new code based on the project documentation style
- End all files with a newline
- Avoid platform-dependent code

## Development Workflow

1. Fork the repository
2. Create a new branch from `main` for your feature/fix
3. Implement your changes
4. Add or update tests as necessary
5. Ensure all tests pass locally
6. Submit a pull request

### Branch Naming Convention

- `feature/description` for new features
- `fix/description` for bug fixes
- `docs/description` for documentation changes
- `refactor/description` for code refactoring
- `test/description` for test-related changes

## Coding Standards

### General Guidelines

- Write clean, maintainable, and testable code
- Keep functions small and focused on a single task
- Use meaningful variable and function names
- Comment complex sections of code
- Follow the principle of least surprise
- Write for readability and maintainability

### JavaScript/TypeScript

- Use [ESLint](https://eslint.org/) for linting JavaScript/TypeScript code
- Follow the Airbnb JavaScript Style Guide
- Use async/await over Promise chains
- Use destructuring when appropriate
- Prefer functional programming patterns

### Solidity

- Follow [Solidity Style Guide](https://docs.soliditylang.org/en/latest/style-guide.html)
- Use [Hardhat](https://hardhat.org/) for smart contract development
- Follow security best practices
- Document functions with NatSpec comments
- Write comprehensive tests for all smart contracts

### React

- Use functional components and hooks
- Extract reusable components
- Follow the React component naming convention (PascalCase)
- Use CSS-in-JS or styled-components for styling
- Organize files by feature/module

## Commit Guidelines

We follow the [Conventional Commits](https://www.conventionalcommits.org/) specification for commit messages:

- `feat:` for new features
- `fix:` for bug fixes
- `docs:` for documentation changes
- `style:` for formatting changes
- `refactor:` for code refactoring
- `test:` for adding or updating tests
- `chore:` for routine tasks, maintenance, etc.

Example: `feat: add user profile image upload`

## Testing

- Write tests for all new features and bug fixes
- Maintain or improve test coverage
- Run the test suite before submitting a PR
- Follow test naming conventions

## Documentation

- Update documentation when changing functionality
- Use clear and consistent language
- Include code examples where appropriate
- Keep API documentation up-to-date

## Getting Help

If you need help with the contribution process or have questions, feel free to:

- Join our [Discord server](https://discord.gg/decentralized-social)
- Ask in the GitHub issues (use the "question" label)
- Email the development team at dev@decentralized.social

## Recognition

Contributors will be recognized in the following ways:

- Listed in CONTRIBUTORS.md
- Mentioned in release notes for significant contributions
- Eligible for community rewards in DST tokens (once the token economy is live)

Thank you for your contributions to making Decentralized Social a reality!

---

This contributing guide is adapted from the [Atom Editor Contributing Guide](https://github.com/atom/atom/blob/master/CONTRIBUTING.md) and is licensed under the [Creative Commons Attribution license](https://creativecommons.org/licenses/by/4.0/).