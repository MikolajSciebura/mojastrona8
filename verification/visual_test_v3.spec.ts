import { test, expect } from '@playwright/test';

test.use({ viewport: { width: 390, height: 844 }, isMobile: true });

test('Mobile Home Page Visual Check', async ({ page }) => {
  await page.goto('http://localhost:8001/');

  // Accept cookies if present
  const cookieBtn = page.locator('button:has-text("Akceptuję")');
  if (await cookieBtn.isVisible()) {
    await cookieBtn.click();
  }

  await page.screenshot({ path: 'verification/home_mobile.png', fullPage: true });
});

test('Admin Dashboard Visual Check (Authenticated)', async ({ page }) => {
  // Go to login
  await page.goto('http://localhost:8001/logowanie');

  // Fill admin credentials (based on schema seed)
  await page.fill('input[name="email"]', 'admin@mstechpc.pl');
  await page.fill('input[name="password"]', 'admin123');
  await page.click('button[type="submit"]');

  // Wait for redirect to dashboard
  await page.waitForURL('**/panel');

  await page.screenshot({ path: 'verification/admin_dashboard_auth.png', fullPage: true });
});
