module.exports = {
	content: ['./**/*.php'],
	theme: {
		// Helper pixel to rem calc: https://nekocalc.com/de/px-zu-rem-umrechner
		fontSize: {
			xs: '0.625rem', // 10px
			sm: '0.875rem', // 14px
			base: '1rem', // 16px
			lg: '1.25rem', // 20px
			xl: '1.5rem', // 24px
			'2xl': '2rem', // 32px
			'3xl': '2.5rem', // 40px
			'4xl': '3.75rem', // 60px
			'5xl': '3.75rem', // 60px
		},
		fontFamily: {
			sans: ['Arial', 'sans-serif'],
			//mono: ['Roboto Mono', 'serif'],
			//serif: ['Roboto Serif', 'serif'],
		},
		fontWeight: {
			light: 200,
			normal: 300,
			medium: 400,
			bold: 500,
		},
		extend: {
			height: {
				'home-swiper': 'calc(100vh - 4rem)',
			},
		},
	},
	corePlugins: {
		aspectRatio: false,
	},
	plugins: [
		require('@tailwindcss/aspect-ratio'),
		require('@tailwindcss/forms'),
		require('tailwindcss-themer')({
			defaultTheme: {
				extend: {
					colors: {
						primary: {
							50: '#e5eeff',
							100: '#cfe0ff',
							200: '#a9c3ff',
							300: '#7599ff',
							400: '#3f5dff',
							500: '#1423ff',
							600: '#0008ff',
							700: '#0009ff',
							800: '#0008e3',
							900: '#000094',
							DEFAULT: '#000068',
						},
						secondary: {
							50: '#f7f7f7',
							DEFAULT: '#f7f7f7',
							100: '#e3e3e3',
							200: '#c8c8c8',
							300: '#a4a4a4',
							400: '#818181',
							500: '#666666',
							600: '#515151',
							700: '#434343',
							800: '#383838',
							900: '#000000',
						},
						focus: {
							50: '#e7f6ff',
							100: '#d3efff',
							200: '#b0dfff',
							300: '#81c8ff',
							400: '#4fa1ff',
							500: '#2878ff',
							DEFAULT: '#2878ff',
							600: '#044bff',
							700: '#0049ff',
							800: '#0038c4',
							900: '#0b3aa4',
						},
						black: {
							DEFAULT: '#212121',
						},
						white: {
							DEFAULT: '#F7F7F7',
						},
						error: {
							50: '#fff0f2',
							100: '#ffe2e6',
							200: '#ffc9d4',
							300: '#ff9db1',
							400: '#ff6688',
							DEFAULT: '#ff3164',
							600: '#f21b5a',
							650: '#f21b5a',
							700: '#cb0544',
							800: '#B0003E',
							900: '#910a3d',
						},
						neutral: {
							50: '#f7f7f7',
							100: '#DCDCDC',
							200: '#c8c8c8',
							300: '#a4a4a4',
							400: '#797979',
							DEFAULT: '#F6F6F6',
							500: '#666666',
							600: '#515151',
							700: '#434343',
							800: '#383838',
							900: '#313131',
						},
						success: {
							50: '#edfcf4',
							100: '#d2f9e2',
							200: '#a9f1cb',
							300: '#72e3ae',
							400: '#39ce8e',
							500: '#15b474',
							600: '#0a915e',
							DEFAULT: '#087951',
							800: '#095c3f',
							900: '#084c35',
						},
						accent: {
							50: '#fcffe5',
							100: '#f5ffc8',
							DEFAULT: '#ebff9a',
							300: '#d8fb5b',
							400: '#c4f229',
							500: '#a5d80a',
							600: '#80ad03',
							700: '#608308',
							800: '#4d670d',
							900: '#415710',
						},
						warning: {
							50: '#fffaec',
							100: '#fff3d3',
							200: '#ffe4a5',
							300: '#ffce6d',
							400: '#ffae32',
							500: '#ff930a',
							DEFAULT: '#ff7b00',
							700: '#cc5902',
							800: '#a1450b',
							900: '#823b0c',
							950: '#461b04',
						},
					},
				},
			},
			themes: [
				{
					name: 'primary',
					extend: {
						colors: {
							palerose: {
								DEFAULT: '#FBC5B4',
							},
							palepurple: {
								DEFAULT: '#E0D3FF',
							},
							palepeach: {
								DEFAULT: '#FADAB6',
							},
							palecyan: {
								DEFAULT: '#D4E9DE',
							},
							palepink: {
								DEFAULT: '#F7DAEF',
							},
							paleblue: {
								DEFAULT: '#C0D8F4',
							},
							palegreen: {
								DEFAULT: '#E3F9D6',
							},
							default: {
								DEFAULT: '#d5d2d7',
							},
						},
					},
				},
				{
					name: 'secondary',
					extend: {
						colors: {
							red: {
								DEFAULT: '#D04425',
							},
							cyan: {
								DEFAULT: '#00B9FF',
							},
							blue: {
								DEFAULT: '#3A25FF',
								200: '#EEEAFF',
							},
							black: {
								DEFAULT: '#000',
							},
						},
					},
				},
			],
		}),
	],
};
