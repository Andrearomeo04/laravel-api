<div style="width: 80%; margin: 0 auto;">
    <header style="background-color: black; color: #fff;">
        <h1>Boolfolio</h1>
    </header>
    <main>
        <h2>Nuovo contatto ricevuto</h2>
        <p>dati:</p>
        <table>
            <tbody>
                <tr>
                    <td>Nome</td>
                    <td>{{ $lead->name }}</td>
                </tr>
                <tr>
                    <td>Cognome</td>
                    <td>{{ $lead->surname }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $lead->email }}</td>
                </tr>
                <tr>
                    <td>Telefono</td>
                    <td>{{ $lead->phone }}</td>
                </tr>
                <tr>
                    <td>Content</td>
                    <td>{{ $lead->content }}</td>
                </tr>
            </tbody>
        </table>
    </main>
</div>