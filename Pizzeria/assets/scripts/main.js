function switchLanguage(lang) {
    document.documentElement.lang = lang;

    const ukElements = document.querySelectorAll('[data-uk]');
    const enElements = document.querySelectorAll('[data-en]');

    ukElements.forEach(el => {
        el.textContent = el.getAttribute(`data-${lang}`);
    });

    document.querySelectorAll('.language-switcher button').forEach(button => {
        button.classList.remove('active');
    });

    document.querySelector(`.language-switcher button[onclick="switchLanguage('${lang}')"]`).classList.add('active');
}

function switchLanguage(language) {
      const elements = document.querySelectorAll('[data-uk], [data-en]');
      
      elements.forEach(el => {
        if (language === 'en') {
          el.textContent = el.getAttribute('data-en');
        } else if (language === 'uk') {
          el.textContent = el.getAttribute('data-uk');
        }
      });
    }

    // Завантаження англійської версії при завантаженні сторінки
    