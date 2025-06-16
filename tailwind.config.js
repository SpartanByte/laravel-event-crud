// tailwind.config.js
module.exports = {
  content: [
    "./resources/**/*.blade.php", // This tells Tailwind to scan your Blade templates
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.jsx", // For use with React
    // etc.
  ],
  // ... other configurations
    theme: {
    extend: {},
  },
  plugins: [],
}