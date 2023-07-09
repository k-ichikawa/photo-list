import React from 'react';
import { Routes, Route } from 'react-router-dom';
import Home from './routes/Home';
import CollectList from './routes/CollectList';
import WantList from './routes/WantList';
import NoMatch from './routes/NoMatch';
import Header from './components/Header';

export function App() {
    return (
      <div className="App">
        <Header />
        <Routes>
          <Route index element={<Home />} />
          <Route path="/collect" element={<CollectList />} />
          <Route path="/want" element={<WantList />} />
          <Route path="*" element={<NoMatch />} />
        </Routes>
      </div>
    );
}
