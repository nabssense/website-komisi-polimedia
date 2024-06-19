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
    },
    extend: {
      
      colors: {
        soft: {
          'base': '#EFF3F8',
        },
        primary: {
          'base': '#ED0038',
          100: '#FFE4E5',
          200: '#FFACB1',
          300: '#FF6A77',
          400: '#ED0038',
          500: '#AB0026',
          600: '#810026',
          700: '#350006',
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
          200: '#EAEAEB',
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
      },
      fontFamily: {
        'display-montagu': ['Montagu Slab'],
        'body-grotesk': ['Clash Grotesk'],
      },
      borderRadius: {
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
        'md': '720px',
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
        '4/3': '4 / 3',
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
        // '18': '72px',
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
      }
    },
    buttonPrimary: {
      'button-primary': 'px-4 py-2 lg:px-8 lg:py-4 bg-primary-base rounded-full justify-center items-center flex text-center text-netral-100 text-2xl font-medium font-THICCCBOI leading-9',
    },
  },
  plugins: [
    // require
    // ('@tailwindcss/line-clamp'),
    // plugin lainnya
  ],
}