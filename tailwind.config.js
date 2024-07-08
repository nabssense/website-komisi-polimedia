/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      'THICCCBOI': "THICCCBOI",
      'Figtree': "Figtree",
    },
    extend: {
      
      colors: {
        soft: {
          'base': '#EFF3F8',
        },
        primary: {
          'base': '#ef6324',
          100: '#FEEEEB',
          200: '#FDCEC4',
          300: '#FB9C87',
          400: '#EF6324',
          500: '#D8571D',
          600: '#AB3E0D',
          700: '#762505',
        },
        secondary: {
          'base': '#2D30C8',
          100: '#CDCEF4',
          200: '#A3A5EA',
          300: '#5053D8',
          400: '#2D30C8',
          500: '#24269E',
          600: '#1A1C75',
          700: '#11124B',
          800: '#846358',
          900: '#2D30C8',
        },
        'komisi-orange': {
          'base': '#F67028',
          100: '#FEF2EB',
          200: '#FCD1BA',
          300: '#F89059',
          400: '#F67028',
          500: '#E15509',
          600: '#B04307',
          700: '#7F3005',
        },
        netral: {
          'base': '#FFFFFF',
          100: '#FFFFFF',
          200: '#EFF3F8',
          300: '#D5D6D7',
          400: '#9A9BA3',
          500: '#747681',
          600: '#52535B',
          700: '#323338',
          800: '#27272B',
          900: '#0A0A0B',
        },
        danger: {
          'base': '#ef4444',
        },
        love: {
          'base': '#ff005d',
        },
      },
      fontFamily: {
        'display-montagu': ['Montagu Slab'],
        'body-grotesk': ['Clash Grotesk'],
      },
      borderRadius: {
        '20px': '20px',
        '4xl': '32px',
        '5xl': '48px',
        '6xl': '60px',
      },
      screens: {
        'xs': '0px',
        // => @media (min-width: 640px) { ... }

        // Smartphone
        'sm': '320px',
        // => @media (min-width: 640px) { ... }

        // Tablet
        'md': '640px',
        // => @media (min-width: 768px) { ... }
  
        'lg': '1024px',
        // => @media (min-width: 1024px) { ... }
        
        // Desktop
        'xl': '1280px',
        // => @media (min-width: 1280px) { ... }
  
        '2xl': '1536px',
        // => @media (min-width: 1536px) { ... }
      },
      aspectRatio: {
        '21/9': '21 / 9',
      },
      // active: {
      //   'bar': border-primary-base,
      //   'text': text-primary-base,
      // },
      width: {
        '128': '128px',
        '192': '192px',
        '348': '348px',
        '360': '360px',
        '480': '480px',
        '560': '560px',
        '720': '720px',
        '960': '960px',
        '1480': '1480px',
      },
      minWidth: {
        '128': '128px',
        '192': '192px',
        '348': '348px',
        '360': '360px',
        '480': '480px',
        '560': '560px',
        '720': '720px',
        '960': '960px',
        '1480': '1480px',
      },
      maxWidth: {
        '128': '128px',
        '192': '192px',
        '348': '348px',
        '360': '360px',
        '480': '480px',
        '560': '560px',
        '720': '720px',
        '960': '960px',
        '1480': '1480px',
      },
      height: {
        '128': '128px',
        '192': '192px',
        '348': '348px',
        '360': '360px',
        '480': '480px',
        '560': '560px',
        '720': '720px',
        '960': '960px',
        '1480': '1480px',
      },
      size: {
        '128': '128px',
        '192': '192px',
        '348': '348px',
        '360': '360px',
        '480': '480px',
        '560': '560px',
        '720': '720px',
        '960': '960px',
        '1480': '1480px',
      },
      padding:{
        '128': '128px',
        '192': '192px',
        '348': '348px',
        '360': '360px',
        '480': '480px',
        '560': '560px',
        '720': '720px',
        '1280': '1280px',
        '1480': '1480px',
      },
      lineHeight:{
        'H1': '3.75rem',
        'H2': '3.0rem',
        'H3': '2.25rem',
        'H4': '1.75rem',
        'B1': '1.5rem',
        'B2': '1.25rem',
        'B3': '1rem',
        'B4': '.75rem',
        '120%': '120%',
      },
      spacing:{
        '18': '72px',
      },
      // fontWeight:{
      //   '400': '400',
      //   '500': '500',
      //   '600': '600',
      //   '700': '700',
      // }
      boxShadow: {
        'card': '0px 0px 8px 0px rgba(0, 0, 0, 0.12);',
        'navbar': '0px 2px 4px 0px rgba(0, 0, 0, 0.10)',
        'bottom-navbar': '2px 0px 4px 0px rgba(0, 0, 0, 0.10)',
        
        '3xl': '0px 0px 16px rgba(0, 0, 0, 0.16)',
        'card-m': '0px 0px 4px rgba(0, 0, 0, 0.12)',
      },
      fontSize:{
        '2xs': '12px',
        '3xs': '10px',
        '4xs': '8px',
        '32': '32px',
        '40': '40px',
      },
      scale: {
        '98': '.98',
        '99': '.99',
      },
    },
  
  },
  variants: {
    extend: {
        backgroundColor: ['group-focus'],
    },
},
  plugins: [
    // require
    // ('@tailwindcss/line-clamp'),
    // plugin lainnya
  ],
}