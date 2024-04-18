document.addEventListener('DOMContentLoaded', function () {
  fetchCategories();

  function fetchCategories() {
      axios.get('/api/category/show')
          .then(response => {
              const categories = response.data;
              displayCategories(categories);
          })
          .catch(error => {
              console.error('خطا در دریافت دسته‌بندی‌ها:', error);
          });
  }

  function displayCategories(categories) {
      const app = document.getElementById('app');
      const ul = document.createElement('ul');

      categories.forEach(category => {
          const li = document.createElement('li');
          li.textContent = category.name;
          ul.appendChild(li);
      });

      app.appendChild(ul);
  }
});