<style>
    :root {
    /* Colors */
    --primary-bg: #292929;
    --text-light: #e4e4e4;
    --text-muted: #bdbdbd;
    --accent: #00cccc;

    /* Fonts */
    --font-heading: 'Bodoni Moda', serif;
    --font-body: 'Raleway', sans-serif;

    /* Font sizes */
    --text-xl: 1.5rem;
    --text-base: 1rem;
    --text-sm: 0.875rem;

    /* Spacing */
    --spacing-xl: 50px;
    --spacing-lg: 40px;
    --spacing-md: 20px;
    --spacing-sm: 12px;
}
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    margin: 0;
    overflow-x: hidden;
    font-family: var(--font-body), sans-serif;
}
.footer-title-wrapper {
    margin-top: var(--spacing-lg);
    width: 100%;
    display: flex;
    justify-content: center;
}
.footer-title-container {
    width: 80%;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: var(--spacing-md);
}
.line {
    height: 1px;
    background-color: var(--primary-bg);
    flex: 1;
}
.title {
    font-family: var(--font-heading), serif;
    color: var(--primary-bg);
    white-space: nowrap;
    font-size: var(--text-xl);
}
.footer {
    width: 100vw;
    background-color: var(--primary-bg);
    padding: var(--spacing-lg) 0;
    margin-top: var(--spacing-xl);
}
.footer-content {
    display: flex;
    justify-content: space-around;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 var(--spacing-md);
}
.footer nav {
    display: flex;
    flex-direction: column;
    gap: var(--spacing-sm);
}
.footer-heading {
    color: var(--text-light);
    font-family: var(--font-heading), serif;
    font-size: var(--text-base);
    font-weight: 600;
    text-transform: uppercase;
    margin-bottom: var(--spacing-sm);
}
.footer-link {
    color: var(--text-muted);
    text-decoration: none;
    cursor: pointer;
    font-size: var(--text-sm);
    font-family: var(--font-body), sans-serif;
}
.footer-link:hover {
    color: var(--accent);
    text-decoration: underline;
}
@media (max-width: 768px) {
    .footer-content {
        flex-direction: column;
        gap: var(--spacing-lg);
        padding: var(--spacing-md);
    }
    .footer-title-container {
        width: 90%;
    }
}
</style>

<footer class="footer">
    <div class="footer-content">
        <nav>
            <h6 class="footer-heading">About Us</h6>
            <a class="footer-link">Branding</a>
            <a class="footer-link">Design</a>
            <a class="footer-link">Marketing</a>
            <a class="footer-link">Advertisement</a>
        </nav>
        <nav>
            <h6 class="footer-heading">Latest News</h6>
            <a class="footer-link">About us</a>
            <a class="footer-link">Contact</a>
        </nav>
        <nav>
            <h6 class="footer-heading">Keep In Touch</h6>
            <a class="footer-link">Terms of use</a>
            <a class="footer-link">Privacy policy</a>
            <a class="footer-link">Cookie policy</a>
        </nav>
    </div>
</footer>