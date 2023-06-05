/** @type {import('tailwindcss').Config} */

const rem = (num) => ({ [num]: `${num / 16}rem` });

const colors = {
  "text-dark": "#2B0B0B", 
  "text-medium": "#746969",
  "text-light": "#FEF9F8",
  "text-extra": "#FFEBE9",

  "main-primary": "#7F2B28",
  "main-primary-beta": "#5B1C1A",
  "main-primary-gamma": "#34100F",

  "main-secondary": "#CC9A7D",
  "main-secondary-beta": "#9E6E52",
  "main-secondary-gamma": "#7C5640",

  "main-tertiary": "#3A4838",
  "main-tertiary-beta": "#3E4A3C",
  "main-tertiary-gamma": "#262D25",

  "main-error": "#B73A2C",
  "main-success": "#508248",

  "bg-primary": "#EFDFD5",
  "bg-primary-beta": "#D8E0D5",
  "bg-primary-gamma": "#FFFFFF",

  "bg-overlay": "rgba(43, 11, 11, 0.6)", 
  "bg-overlay-beta": "rgba(43, 11, 11, 0.1)"
};


const typography = {
  fontSize: {
      ...rem(6),
      ...rem(10),
      ...rem(11),
      ...rem(12),
      ...rem(13),
      ...rem(14),
      ...rem(15),
      ...rem(16),
      ...rem(18),
      ...rem(20),
      ...rem(24),
      ...rem(25),
      ...rem(26),
      ...rem(28),
      ...rem(30),
      ...rem(32),
      ...rem(34),
      ...rem(36),
      ...rem(38),
      ...rem(40),
      ...rem(45),
      ...rem(48),
      ...rem(50),
      ...rem(60),
      ...rem(67),
      ...rem(70),
      ...rem(72),
      ...rem(76),
      ...rem(90),
      ...rem(100),
      ...rem(115),
      ...rem(120),
      ...rem(132),
      ...rem(140),
      ...rem(150),
      ...rem(180),
      ...rem(196),
      ...rem(210),
      ...rem(220),
      ...rem(270),
  },
  lineHeight: {
      1: 1,
      ...rem(11),
      ...rem(16),
      ...rem(18),
      ...rem(19),
      ...rem(20),
      ...rem(22),
      ...rem(24),
      ...rem(26),
      ...rem(28),
      ...rem(30),
      ...rem(38),
      ...rem(46),
      ...rem(48),
      ...rem(55),
      ...rem(60),
      ...rem(65),
      ...rem(70),
      ...rem(95),
      ...rem(115),
      ...rem(130),
      ...rem(132),
      ...rem(160),
      ...rem(180),
      ...rem(220),
      ...rem(235),
      ...rem(250),
      ...rem(270),
  },
  letterSpacing: {
      normal: `${0.3 / 16}rem`,
  },
};

export default {
  content: [],
  purge: [],
  purge: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    ...typography,
    fontFamily: {
      sans: ['PT Serif', 'serif'],
      inter: ['Space Mono', 'monospace'],
    },
    extend: {
      colors,
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
};
