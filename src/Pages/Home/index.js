import React, { useState, useEffect } from 'react';
import { useNavigate } from 'react-router-dom';
import Header from "../../Components/Header";
import axios from "axios";
import { Link } from 'react-router-dom';

function Home() {
  const navigate = useNavigate();
  const [receitas, setReceitas] = useState([]);
  const [lista, setLista] = useState([]);

  useEffect(() => {
    const getLista = async () => {
      try {
        const response = await axios.get('/receitas.json');
        const data = response.data;
        setLista(data);
      } catch (error) {
        console.log(error);
      }
    };

    const receitasArmazenadas = localStorage.getItem('receitas');
    if (receitasArmazenadas) {
      setReceitas(JSON.parse(receitasArmazenadas));
    }

    getLista();
  }, []);

  const handleDelete = (id) => {
    const updatedReceitas = receitas.filter(receita => receita.id !== id);
    updateReceitas(updatedReceitas);
  };

  const updateReceitas = (updatedReceitas) => {
    setReceitas(updatedReceitas);
    localStorage.setItem('receitas', JSON.stringify(updatedReceitas));
  };

  return (
    <div>
      <Header />

      <div style={{ textAlign: 'center', margin: '20px 0' }}>
        <h3>Lista de Receitas</h3>
      </div>
      {lista.length === 0 ? (
        <p style={{ textAlign: 'center' }}>Carregando...</p>
      ) : (
        <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center' }}>
          {lista.map((receita) => (
            <div key={receita.id} style={{ margin: '10px 0' }}>
              <p>{receita.id}</p>
              <Link
                to={`/detalhes/${receita.id}`}
                style={{ textDecoration: 'none', color: '#3498db' }}
              >
                <p>{receita.titulo}</p>
              </Link>
            </div>
          ))}
        </div>
      )}

      <ul style={{ listStyle: 'none', padding: 0 }}>
        {receitas.map((receita) => (
          <li key={receita.id} style={{ marginBottom: '10px' }}>
            <p>{receita.titulo}</p>
            <button
              onClick={() => navigate(`/detalhes/${receita.id}`)}
              style={{
                backgroundColor: '#3498db',
                color: '#fff',
                padding: '5px 10px',
                border: 'none',
                borderRadius: '5px',
                marginRight: '5px',
                cursor: 'pointer',
              }}
            >
              Detalhes
            </button>
            <button
              onClick={() => handleDelete(receita.id)}
              style={{
                backgroundColor: '#e74c3c',
                color: '#fff',
                padding: '5px 10px',
                border: 'none',
                borderRadius: '5px',
                cursor: 'pointer',
              }}
            >
              Excluir
            </button>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default Home;