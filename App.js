import logo from './logo.svg';
import './App.css';

function App() {
  return (
    <div className="container">
    <form>
  <fieldset>
    <legend>Legend</legend>
    <div className="form-group row">
      <label for="staticEmail" className="col-sm-2 col-form-label">Email</label>
      <div className="col-sm-10">
        <input type="text" readonly="" className="form-control-plaintext" id="staticEmail" value="email@example.com">
     

      <div className="form-group row">
      <label for="staticEmail" className="col-sm-2 col-form-label">Email</label>
      <div className="col-sm-10">
        <input type="text" readonly="" className="form-control-plaintext" id="staticEmail" value="email@example.com">
   
    <button className="btn btn primary">Submit</button>
    </fieldset>
    </form>
    </div>
  );
}

export default App;
