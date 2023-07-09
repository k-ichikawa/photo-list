import React from 'react';
import { Link } from "react-router-dom";

function Header(): React.ReactElement {
  return (
    <header>
      <div id="top-header">
        <div id="header-title">
          <Link to='/'>Oshi Photo</Link>
        </div>
        <div id="tool">
          <div id="notification">
            <a href="#">
              <img src="/svg/notification.svg" alt="notification icon"></img>
            </a>
          </div>
          <div id="settings">
            <a href="#">
              <img src="/svg/setting.svg" alt="setting icon"></img>
            </a>
          </div>
          <div id="login">
            <a href="#">
              <img src="/svg/login.svg" alt="login icon"></img>
            </a>
          </div>
        </div>
      </div>
      <nav>
        <ul>
          <li>
            <Link to='/collect'>
              <img src="/svg/collect.svg" alt="collect icon"></img>
              <span>collect</span>
            </Link>
          </li>
          <li>
            <Link to='/want'>
              <img src="/svg/want.svg" alt="want icon"></img>
              <span>want</span>
            </Link>
          </li>
        </ul>
      </nav>
    </header>
  );
}

export default Header;
