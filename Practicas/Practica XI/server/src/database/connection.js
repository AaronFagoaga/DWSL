import mysql from 'mysql2';

const settings = {
  host: 'localhost',
  user: 'root',
  password: '1234',
  database: 'dbblog'
};

export const getConnection = async () => {
  try {
    const pool = await mysql.createConnection(settings);
    console.log('Conexion establecida');
    return pool;
    }  catch (error) {
      console.log(error);
    }
};