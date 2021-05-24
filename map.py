import folium
import os
import json

# Creare harta
m = folium.Map(location=[45.6427, 25.5887], zoom_start=4)

# Text tooltip
tooltip = 'Click Pentru Mai Multe Informatii'

# CUstom marker icon
logoIcon = folium.features.CustomIcon('logo.jpeg', icon_size=(50, 50))

# Vega data
vis = os.path.join('data', 'vis.json')

# Geojson Data
overlay = os.path.join('data', 'overlay.json')

# creare markere
folium.Marker([45.6427, 25.5887],
              popup='<strong>Locatia unu</strong>', # when you click the marker
              tooltip=tooltip).add_to(m), # when you hover marker
folium.Marker([44.9367, 26.0129],
              popup='<strong>Locatia doi</strong>',
              tooltip=tooltip,
              icon=folium.Icon(icon='cloud')).add_to(m),
folium.Marker([46.7712, 23.6236],
              popup='<strong>Locatia trei</strong>',
              tooltip=tooltip,
              icon=folium.Icon(color='purple')).add_to(m),
folium.Marker([47.1585, 27.6014],
              popup='<strong>Locatia patru</strong>',
              tooltip=tooltip,
              icon=folium.Icon(color='green', icon='leaf')).add_to(m),
folium.Marker([44.1598, 28.6348],
              popup='<strong>Locatia cinci</strong>',
              tooltip=tooltip,
              icon=logoIcon).add_to(m),
folium.Marker([32.7607, 16.9595],
              popup=folium.Popup(max_width=450).add_child(folium.Vega(json.load(open(vis)), width=450, height=250))).add_to(m),
folium.Marker([44.3546, 20.0129],
              popup='<strong>Locatia 6</strong>',
              tooltip=tooltip,
              icon=folium.Icon(icon='cloud')).add_to(m),
folium.Marker([24.9367, 76.0129],
              popup='<strong>Locatia 7</strong>',
              tooltip=tooltip,
              icon=folium.Icon(icon='cloud')).add_to(m),
folium.Marker([44.9367, -26.0129],
              popup='<strong>Locatia 8</strong>',
              tooltip=tooltip,
              icon=folium.Icon(icon='cloud')).add_to(m),
folium.Marker([14.9367, -26.0129],
              popup='<strong>Locatia 9</strong>',
              tooltip=tooltip,
              icon=folium.Icon(icon='cloud')).add_to(m),
folium.Marker([94.9367, -26.0129],
              popup='<strong>Locatia 10</strong>',
              tooltip=tooltip,
              icon=folium.Icon(icon='cloud')).add_to(m),
folium.Marker([49.9367, 16.0129],
              popup='<strong>Locatia 11</strong>',
              tooltip=tooltip,
              icon=folium.Icon(icon='cloud')).add_to(m),
folium.Marker([4.9367, -26.0129],
              popup='<strong>Locatia 12</strong>',
              tooltip=tooltip,
              icon=folium.Icon(icon='cloud')).add_to(m),
folium.Marker([-44.9367, 6.0129],
              popup='<strong>Locatia 13</strong>',
              tooltip=tooltip,
              icon=folium.Icon(icon='cloud')).add_to(m),

# Marker circular
folium.CircleMarker(
    location=[50.5039, 4.4699],
    radius=50,
    popup='Vacanta',
    color='#428bca',
    fill=True,
    fill_color='#428bca'
).add_to(m)

# Geojson overlay
folium.GeoJson(overlay, name='brasov').add_to(m)

# Generare harta
m.save('map.html')