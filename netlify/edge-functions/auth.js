export default async (request, context) => {
  const auth = request.headers.get("authorization") || "";
  const [scheme, encoded] = auth.split(" ");

  if (scheme === "Basic" && encoded) {
    const [user, pass] = atob(encoded).split(":");
    if (
      user === Netlify.env.get("UTILISATEUR") &&
      pass === Netlify.env.get("MDP")
    ) {
      return context.next();
    }
  }

  return new Response("Authentification requise", {
    status: 401,
    headers: { "WWW-Authenticate": 'Basic realm="Zone privée"' },
  });
};

export const config = { path: "/prive/arbre_1.html" };