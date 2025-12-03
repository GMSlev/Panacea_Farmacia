-- INSERÇÃO DE DADOS DE MEDICAMENTOS NA TABELA REMÉDIO.
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Ibuprofeno','Anti-Inflamatório','Comprimido','A partir de 12 anos',17.00,'200mg',38);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Ibuprofeno','Anti-Inflamatório','Comprimido','A partir de 12 anos',32.00,'400mg',78);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Ibuprofeno','Anti-Inflamatório','Gotas','A partir de 6 meses',46.00,'50mg/ml',65);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Ibuprofeno','Anti-Inflamatório','Xarope','A partir de 6 meses',29.00,'100mg/5ml',43);
    
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Dipirona','Analgésico','Comprimido','A partir de 12 anos',14.00,'500mg',42);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Dipirona','Analgésico','Comprimido','A partir de 12 anos',17.00,'1g',85);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Dipirona','Analgésico','Gotas','A partir de 3 meses',21.00,'500mg/ml',86);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Dipirona','Analgésico','Xarope','A partir de 3 meses',26.00,'500mg/5ml',99);

    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Rivotril','Anti-convulsionante','Comprimido','A partir de 12 anos',19.00,'0.5mg',60);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Rivotril','Anti-convulsionante','Comprimido','A partir de 12 anos',32.00,'2mg',34);
      
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Neosoro','Descongestionante nasal','Solução nasal','A partir de 12 anos',12.00,'0.5mg/ml',38);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Neosoro','Descongestionante nasal','Solução nasal','A partir de 2 anos',14.00,'0.25mg/ml',39);
      
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Tadalafila','Vasodilatador','Comprimido','A partir de 18 anos',38.00,'5mg',56);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Tadalafila','Vasodilatador','Comprimido','A partir de 18 anos',52.00,'10mg',97);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Tadalafila','Vasodilatador','Comprimido','A partir de 18 anos',70.00,'20mg',91);
      
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Loratadina','Antialérgico','Comprimido','A partir de 12 anos',14.00,'10mg',43);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Loratadina','Antialérgico','Xarope','A partir de 2 anos',19.00,'1mg/ml',20);
      
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Paracetamol','Analgésico','Comprimido','A partir de 12 anos',11.00,'500mg',22);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Paracetamol','Analgésico','Comprimido','A partir de 12 anos',15.00,'750mg',33);
     insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Paracetamol','Analgésico','Gotas','A partir de 3 meses',18.00,'200mg/ml',84);
      
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Topiramato','Anti-convulsionante','Comprimido','A partir de 12 anos',27.00,'25mg',12);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Topiramato','Anti-convulsionante','Comprimido','A partir de 12 anos',45.00,'50mg',31);
     insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Topiramato','Anti-convulsionante','Comprimido','A partir de 12 anos',60.00,'100mg',34); 
      
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Excitalopram','Antidepressivo','Comprimido','A partir de 12 anos',31.00,'10mg',120);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Excitalopram','Antidepressivo','Comprimido','A partir de 12 anos',50.00,'20mg',21);
    
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Amitriptilina','Antidepressivo','Comprimido','A partir de 12 anos',27.00,'10mg',20);
    insert into REMEDIO(nome,classe,tipo,fx_etaria,preco,concentracao,estoque)
      values('Amitriptilina','Antidepressivo','Comprimido','A partir de 12 anos',35.00,'25mg',69);  


-- INSERÇÃO DOS DADOS DOS USUARIOS NA TABELA USUARIOS.
-- Dados utilizados para exemplo: NOME DO ALUNO, usuario = ra , senha, e-mail ficitício, e data do cadastro do mesmo.

insert into usuarios (id_user,nome,usuario,senha_hash,email,data_cadastro) 
values 
( null ,"Akira Moritaka" ,925111877,"senhateste123","akira@teste.com",'2025-12-01'),  
( null ,"André Mendes" ,925102731,"senhateste123","andre@teste.com",'2025-12-01'),
( null ,"Bruna Rodrigues" ,925102447,"senhateste123","bruna@teste.com",'2025-12-01'),
( null ,"Caio de Oliveira" ,925100846,"senhateste123","caio@teste.com",'2025-12-01'),
( null ,"Gabriel Martinez" ,925106434,"senhateste123","gabriel@teste.com",'2025-12-01'),
( null ,"João Victor" ,925113592,"senhateste123","joao@teste.com",'2025-12-01'),
( null ,"Leandro Marc" ,925200567,"senhateste123","leandro@teste.com",'2025-12-01'),
( null ,"Rafael Moniz" ,925106499,"senhateste123","rafael@teste.com",'2025-12-01'),
( null ," Theo Viana" ,9251057847,"senhateste123","theo@teste.com",'2025-12-01'),
( null ,"Vinicius Nascimento" ,925202872,"senhateste123","vinicius@teste.com",'2025-12-01');
 
     
