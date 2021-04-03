module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
      backgroundImage: theme => ({
        'hero-pattern': "url('https://i.imgur.com/64kel83.jpg')",
       })
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    
  ]
}
