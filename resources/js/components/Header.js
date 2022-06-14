import React from 'react';
import ReactDOM from 'react-dom';

function Header() {
    return (
        <header class="bg-header-desktop bg-center bg-no-repeat bg-cover w-full h-36 bg-desDarkCyan">
        </header>
    );
}

export default Header;

if (document.getElementById('header')) {
    ReactDOM.render(<Header />, document.getElementById('header'));
}




