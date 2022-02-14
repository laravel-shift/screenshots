module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                github: {
                    'merged': '#8250df',
                    'branch-bg': '#ddf4ff',
                    'branch-fg': '#0969da',
                },
            },
            fontFamily: {
                sans: '-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji"',
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}
