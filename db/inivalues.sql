


INSERT INTO `entreprise` (`identreprise`, `nomentreprise`) VALUES
(1, 'Enalean');


INSERT INTO `equipe` (`idequipe`, `nomequipe`) VALUES
(1, 'Team A'),
(2, 'Team B');

INSERT INTO `employe` (`idemploye`, `nomemploye`, `nombredepot`, `fkentreprise`, `fkequipe`) VALUES
(1, 'nterray', 3, 1, 1),
(2, 'yannis-rossetto', 14, 1, 1),
(3, 'sandrae', 5, 1, 2);
