import React from 'react';
import ReactDOM from 'react-dom';

// styled-components
import styled from "styled-components";

// styles
const HeaderElement = styled.div`
	font-size: 2em;
`;

const Header = () => {
	return(
		<HeaderElement>hello worlddded</HeaderElement>
	);
}

export default {Header};

if (document.getElementById('header')) {
    ReactDOM.render(<Header />, document.getElementById('header'));
}