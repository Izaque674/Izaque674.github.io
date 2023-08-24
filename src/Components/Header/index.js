import { Link } from 'react-router-dom';

function Header(){
    return(
        <header>
            <h2>Livro de Receitas</h2>

            <div className='menu'>  
                <Link to='/'>Home</Link>
                <Link to='/adicionar'>Adicionar</Link>
            </div>
        </header>
    );
}

export default Header;