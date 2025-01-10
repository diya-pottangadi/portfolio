import React from "react";

import { getImageUrl } from "./assets";

export const Hero = () => {
    return (
    <section>
        <div>
            <h1>Hi, I'm Diya</h1>
            <p> I'm a full-stack developer with 5 years of experience using React and Node.js </p>
            <a href="mailto:diyapottangadi@email.com">Contact Me</a>
            
            <img src={getImageUrl("hero/heroImage.png")} alt="Hero image of me"/>
        </div>
    </section>
    );
};