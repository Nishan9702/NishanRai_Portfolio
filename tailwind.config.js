// tailwind.config.js
// This configuration extends Tailwind with your custom theme colors, fonts, and border radii.
// It replaces the inline <script> block you had in home.blade.php.

/**
 * Tailwind CSS configuration
 * https://tailwindcss.com/docs/configuration
 */
module.exports = {
  // Paths to all of your template files. Tailwind will purge unused styles in production.
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        background: '#0B0D12',
        surface: '#12161F',
        textPrimary: '#F5F7FA',
        textMuted: '#8A93A6',
        borderHairline: 'rgba(255,255,255,0.08)',
        accentMint: '#00E5C7',
        accentViolet: '#7C6BFF',
      },
      fontFamily: {
        space: ['Space Grotesk', 'sans-serif'],
        inter: ['Inter', 'sans-serif'],
        mono: ['JetBrains Mono', 'monospace'],
      },
      borderRadius: {
        md: '12px',
        lg: '16px',
      },
    },
  },
  plugins: [],
}
