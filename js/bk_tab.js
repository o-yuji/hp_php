
const tabs = document.querySelectorAll('#tab');
const is_active = document.querySelector('.text-white');
const not_active = document.querySelector('.text-gray-700');


tabs.forEach(tab => {
    tab.addEventListener('click', () => {
        is_active.classList.toggle("text-white");
        is_active.classList.toggle("bg-gray-500");
        is_active.classList.toggle("dark:bg-gray-800");
        // is_active.classLnot.toggle("text-gray-700");
        // is_active.classLinot.toggle("bg-gray-200");

        // not_active.classList.toggle("text-white");
        // not_active.classList.toggle("bg-gray-500");
        // not_active.classList.toggle("dark:bg-gray-800");
        not_active.classLnot.toggle("text-gray-700");
        not_active.classLinot.toggle("bg-gray-200");
        // tab.classList.toggle("text-white", "bg-gray-500", "rounded-t-lg", "dark:bg-gray-800", "dark:text-blue-500");
    });

});

// "text-white", "bg-gray-500", "rounded-t-lg", "dark:bg-gray-800", "dark:text-blue-500"

// elm.classList.toggle("first-class", "second-class", "third-class");