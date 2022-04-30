import React, { useState, useEffect } from "react";
import axios from "axios";

import { useHistory } from "react-router-dom";


const Data = (props) => {
    let history = useHistory();

    const [products, setProducts] = useState([]);

    useEffect(() => {

        // axios.get("product/list")
        axios.get("http://127.0.0.1:8000/api/studentList")
            .then(resp => {

                setProducts(resp.data);

            }).catch(err => {
                console.log(err);
                console.log("not found");
            });
    }, []);



    return (
        <center>
            <div>

                <h1> Student List From Data Base</h1>
                <ul>
                    <table style={{ backgroundColor: "lightblue", margin: "15 px", padding: "15", }}>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        {
                            products.map(p => (
                                <tr>
                                    <td>{p.name}</td>
                                    <td>{p.email}</td>
                                    <td>{p.phone}</td>
                                </tr>

                            ))
                        }
                    </table>
                </ul>
            </div>
        </center>
    )
}
export default Data;