import { BrowserRouter, Routes, Route } from "react-router-dom";
import Home from './Pages/Home';
import Descricao from './Pages/Descricao';
import Adicionar from './Pages/Adicao';

function RoutesApp(){
    return(
        <BrowserRouter>
            <Routes>
                <Route path="/" element={<Home/>}/>
                <Route path="/detalhes/:id" element={<Descricao />} />
                <Route path="/adicionar" element={<Adicionar/>}/>
            </Routes>
        </BrowserRouter>
    );
}

export default RoutesApp;