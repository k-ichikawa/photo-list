import React from 'react';
import { Routes, Route } from 'react-router-dom';
import Home from '@/js/routes/Home';
import CollectList from '@/js/routes/CollectList';
import WantList from '@/js/routes/WantList';
import NoMatch from '@/js/routes/NoMatch';
import Header from '@/js/components/Header';

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
