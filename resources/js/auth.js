import { initializeApp } from "firebase/app";
import {
    getAuth,
    signInWithEmailAndPassword,
    createUserWithEmailAndPassword,
    signOut,
} from "firebase/auth";

firebaseConfig = window.firebaseConfig;
const app = initializeApp(firebaseConfig);

window.auth = getAuth(app);
window.signInWithEmailAndPassword = signInWithEmailAndPassword;
window.createUserWithEmailAndPassword = createUserWithEmailAndPassword;
window.signOut = signOut;
