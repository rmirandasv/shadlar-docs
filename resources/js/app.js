import './bootstrap';

document.addEventListener('alpine:init', () => {
    Alpine.data('themeToggle', () => {
        const storageKey = 'ticketly-theme';

        const getPreferredTheme = () => {
            const stored = localStorage.getItem(storageKey);
            if (stored === 'light' || stored === 'dark') {
                return stored;
            }

            return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        };

        const applyTheme = (theme) => {
            document.documentElement.dataset.theme = theme;
        };

        return {
            isDark: false,

            init() {
                const theme = getPreferredTheme();
                this.isDark = theme === 'dark';
                applyTheme(theme);

                window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
                    const stored = localStorage.getItem(storageKey);
                    if (stored === 'light' || stored === 'dark') {
                        return;
                    }

                    this.isDark = event.matches;
                    applyTheme(event.matches ? 'dark' : 'light');
                });
            },

            toggle() {
                this.isDark = !this.isDark;
                const theme = this.isDark ? 'dark' : 'light';
                localStorage.setItem(storageKey, theme);
                applyTheme(theme);
            },
        };
    });
});

