/** @type {import('tailwindcss').Config} */

const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
  corePlugins: {
    preflight: false,
  },
  important: true,
  content: ["./src/**/*.{js,scss}", "./*.php",],
  theme: {
    extend: {
      fontFamily: {
        'sans': ['"neue-haas-grotesk-display"', ...defaultTheme.fontFamily.sans],
        'serif': ['"neue-haas-grotesk-display"', ...defaultTheme.fontFamily.serif],
        'mono': ['"neue-haas-grotesk-display"', ...defaultTheme.fontFamily.mono],
        'druk-wide': ['"Druk Wide"', ...defaultTheme.fontFamily.sans],
      },
      colors: {
        "slate": {
          50: "#FCFDFD",
          100: "#F7F9FC", // #FCFDFD replaced with TCA
          200: "#F9FAFB",
          300: "#F2F5F8",
          400: "#EFF3F6",
          500: "#ECF1F4", // TCA
          600: "#AEC3D0",
          700: "#7196AD",
          800: "#47677B",
          900: "#24333D",
          950: "#11181D"
        },
        "stone": {
          DEFAULT: "#5B5A58",
          50: "#F0F0EF",
          100: "#DEDEDD",
          200: "#BEBDBC",
          300: "#9D9C9A",
          400: "#7C7B78",
          500: "#5B5A58",
          600: "#494846",
          700: "#363635",
          800: "#242423",
          900: "#121212",
          950: "#0A0A0A"
        },
        "red": {
          DEFAULT: "#E40634",
          50: "#FEE6EB",
          100: "#FEC8D3",
          200: "#FC92A7",
          300: "#FB607F",
          400: "#F92953",
          500: "#E40634", // TCA Mid Red, TCA Hospo 3
          600: "#AF0024", // #B80529 replaced with TCA Dark Red
          700: "#8B041F",
          800: "#590214",
          900: "#2D010A",
          950: "#190105"
        },
        "orange": {
          DEFAULT: "#FF6238",
          50: "#FFEFEB",
          100: "#FFDFD6",
          200: "#FFBFAD",
          300: "#FF8379", // #FFA38A replaced with TCA Hospo 1
          400: "#FE791A", // #FF8361 TCA Classic Orange
          500: "#FF6238", // TCA Orange, TCA Hospo 2, TCA Operations 2
          600: "#FA3600",
          700: "#BD2900",
          800: "#7A1B00",
          900: "#3D0D00",
          950: "#1F0700"
        },
        "amber": {
          DEFAULT: "#FFAB00",
          50: "#FFF7E5",
          100: "#FFEECC",
          200: "#FFDD99",
          300: "#FFCC66",
          400: "#FFBB33",
          500: "#FFAB00", // TCA Operations 1
          600: "#CC8800",
          700: "#996600",
          800: "#664400",
          900: "#332200",
          950: "#191100"
        },
        "yellow": {
          DEFAULT: "#FFCD00",
          50: "#FFFAE5",
          100: "#FFF5CC",
          200: "#FFEB99",
          300: "#FFE066",
          400: "#FFD633",
          500: "#FFCD00", // TCA Operations 3, TCA Health 3
          600: "#CCA300",
          700: "#997A00",
          800: "#665200",
          900: "#332900",
          950: "#191400"
        },
        "lime": {
          DEFAULT: "#B1D622",
          50: "#F8FCE9",
          100: "#F1F8D3",
          200: "#E1F0A3",
          300: "#D2E977",
          400: "#C4E24B",
          500: "#B1D622", // TCA Health 1
          600: "#9BCA00", // #8FAC1B replaced with TCA Health 2
          700: "#6A8014",
          800: "#46540D",
          900: "#252C07",
          950: "#121603"
        },
        "green": {
          DEFAULT: "#006353",
          50: "#D6FFF8",
          100: "#ADFFF1",
          200: "#5CFFE4",
          300: "#0AFFD6",
          400: "#00816F", // #00B899 replaced with TCA Mid Green
          500: "#006353", // TCA Green
          600: "#005244",
          700: "#003D33",
          800: "#002922",
          900: "#001411",
          950: "#000A09"
        },
        "teal": {
          DEFAULT: "#00B9A5",
          50: "#E0FFFC",
          100: "#BDFFF8",
          200: "#80FFF2",
          300: "#68BDB6", // #3DFFEC replaced with TCA Finance 1
          400: "#57B6AE", // #00FAE1 replaced with TCA Light Green
          500: "#00B9A5", // TCA Finance 2
          600: "#009485",
          700: "#007065",
          800: "#004D45",
          900: "#002420",
          950: "#001412"
        },
        "sky": {
          DEFAULT: "#379BBB",
          50: "#EBF6F9",
          100: "#D8ECF3",
          200: "#ACD8E7",
          300: "#85C5DB",
          400: "#5AB1CE",
          500: "#379BBB",
          600: "#2C7B96",
          700: "#225E72",
          800: "#163E4B",
          900: "#0C2027",
          950: "#061014"
        },
        "blue": {
          DEFAULT: "#0081AA",
          50: "#DBF7FF",
          100: "#BDF0FF",
          200: "#75DFFF",
          300: "#33CFFF",
          400: "#3593BA", // #00B8F0 replaced with TCA Leadership 1
          500: "#0081AA", // TCA Finance 3, TCA Leadership 3
          600: "#006785", // #006A8A replaced with TCA Leadership 2
          700: "#004E66",
          800: "#003342",
          900: "#001B24",
          950: "#000C0F"
        },
      },
    },
  },
  plugins: [
    require('tailwindcss-debug-screens'),
    require('tailwind-scrollbar'),
  ],
}
