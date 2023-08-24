import React, { useState } from 'react';
import { useNavigate } from 'react-router-dom';

function NovaReceita() {
  const navigate = useNavigate();
  const [titulo, setTitulo] = useState('');
  const [ingredientes, setIngredientes] = useState('');
  const [modoPreparo, setModoPreparo] = useState('');

  const handleSubmit = async (e) => {
    e.preventDefault();

    const novaReceita = {
      id: Date.now(),
      titulo,
      ingredientes: ingredientes.split('\n'),
      modoPreparo,
    };

    const receitasExistentes = JSON.parse(localStorage.getItem('receitas')) || [];

    const novasReceitas = [...receitasExistentes, novaReceita];

    localStorage.setItem('receitas', JSON.stringify(novasReceitas));

    navigate('/');
  };

  return (
    <div style={{ backgroundColor: '#f8f8f8', padding: '20px' }}>
      <h1 style={{ color: '#e74c3c', textAlign: 'center' }}>
        Adicionar Nova Receita
      </h1>
      <form onSubmit={handleSubmit}>
        <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', marginTop: '20px' }}>
          <label style={{ fontWeight: 'bold' }}>Título:</label>
          <input
            type="text"
            value={titulo}
            onChange={(e) => setTitulo(e.target.value)}
            required
            style={{ width: '100%', padding: '8px', marginTop: '5px', border: '1px solid #ccc', borderRadius: '5px' }}
          />
        </div>
        <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', marginTop: '20px' }}>
          <label style={{ fontWeight: 'bold' }}>Ingredientes:</label>
          <textarea
            value={ingredientes}
            onChange={(e) => setIngredientes(e.target.value)}
            required
            style={{ width: '100%', padding: '8px', marginTop: '5px', border: '1px solid #ccc', borderRadius: '5px' }}
          />
        </div>
        <div style={{ display: 'flex', flexDirection: 'column', alignItems: 'center', marginTop: '20px' }}>
          <label style={{ fontWeight: 'bold' }}>Modo de Preparo:</label>
          <textarea
            value={modoPreparo}
            onChange={(e) => setModoPreparo(e.target.value)}
            required
            style={{ width: '100%', padding: '8px', marginTop: '5px', border: '1px solid #ccc', borderRadius: '5px' }}
          />
        </div>
        <button
          type="submit"
          style={{
            backgroundColor: '#3498db',
            color: '#fff',
            padding: '10px 20px',
            border: 'none',
            borderRadius: '5px',
            cursor: 'pointer',
            marginTop: '10px',
          }}
        >
          Adicionar Receita
        </button>
      </form>
    </div>
  );
}

export default NovaReceita;